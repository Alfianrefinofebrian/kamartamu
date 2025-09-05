import React, { useEffect, useState, useRef } from 'react';

// PropertySlider: images, fallback, altText
function PropertySlider({ images = [], fallback = null, altText = 'Property' }) {
  const normalize = (p) => {
    if (!p) return null;
    if (p.startsWith('//') || p.startsWith('http://') || p.startsWith('https://')) return p;
    if (p.startsWith('/')) return window.location.origin + p;
    return window.location.origin + '/storage/' + p;
  };

  const imgs = (images && images.length
    ? images.map((i) => {
        const src = typeof i === 'string' ? i : (i.image_url || i.url || i);
        return normalize(src);
      }).filter(Boolean)
    : (fallback ? [normalize(fallback)].filter(Boolean) : []));

  const [index, setIndex] = useState(0);
  const startX = useRef(null);
  const isMouseDown = useRef(false);

  useEffect(() => {
    // reset index if imgs change
    setIndex(0);
  }, [imgs.length]);

  const prev = () => setIndex((s) => (imgs.length ? (s - 1 + imgs.length) % imgs.length : 0));
  const next = () => setIndex((s) => (imgs.length ? (s + 1) % imgs.length : 0));

  const onTouchStart = (e) => { startX.current = e.touches ? e.touches[0].clientX : e.clientX; };
  const onTouchEnd = (e) => {
    if (startX.current === null) return;
    const endX = e.changedTouches ? e.changedTouches[0].clientX : e.clientX;
    const diff = endX - startX.current;
    if (Math.abs(diff) > 30) diff > 0 ? prev() : next();
    startX.current = null;
    isMouseDown.current = false;
  };

  const onMouseDown = (e) => { isMouseDown.current = true; startX.current = e.clientX; };
  const onMouseUp = (e) => { if (!isMouseDown.current) return; onTouchEnd(e); };

  if (!imgs || imgs.length === 0) {
    return <div className="w-full h-full flex items-center justify-center bg-[#FFFBDE]">No image</div>;
  }

  return (
    <div
      className="relative w-full h-full select-none"
      onTouchStart={onTouchStart}
      onTouchEnd={onTouchEnd}
      onMouseDown={onMouseDown}
      onMouseUp={onMouseUp}
    >
      <img src={imgs[index]} alt={altText || 'Property'} className="w-full h-full object-cover" />

      {/* arrows */}
      {imgs.length > 1 && (
        <>
          <button
            onClick={prev}
            aria-label="previous"
            className="absolute left-2 top-1/2 -translate-y-1/2 rounded-full w-10 h-10 flex items-center justify-center text-black hover:opacity-80"
          >
            ‹
          </button>
          <button
            onClick={next}
            aria-label="next"
            className="absolute right-2 top-1/2 -translate-y-1/2 rounded-full w-10 h-10 flex items-center justify-center text-black hover:opacity-80"
          >
            ›
          </button>
        </>
      )}

      {/* dots */}
      {imgs.length > 1 && (
        <div className="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
          {imgs.map((_, i) => (
            <button
              key={i}
              aria-label={`go-to-${i}`}
              onClick={() => setIndex(i)}
              className={`w-2 h-2 rounded-full border ${i === index ? 'border-black' : 'border-black/30'}`}
            />
          ))}
        </div>
      )}
    </div>
  );
}

export default function PropertyDetail({ initialId = null }) {
  const fromUrl = typeof window !== 'undefined' ? (window.location.pathname.match(/\/property\/([^/]+)/) || [])[1] : null;
  const id = initialId || fromUrl;
  const [property, setProperty] = useState(null);
  const [loading, setLoading] = useState(true);

  const formatPrice = (v) => {
    if (v === null || v === undefined || v === '') return '-';
    const n = Number(String(v).replace(/[^0-9.-]+/g, ''));
    if (Number.isNaN(n)) return v;
    if (n >= 1000 && n < 1000000) return Math.round(n / 1000) + 'K';
    return n.toLocaleString();
  };

  useEffect(() => {
    if (!id) return;
    setLoading(true);
    fetch((typeof window !== 'undefined' ? window.location.origin : '') + '/api/properties/' + id)
      .then((res) => res.json())
  .then((data) => {
        // normalize main image and images list if present
        const normalize = (p) => {
          if (!p) return null;
          if (p.startsWith('//') || p.startsWith('http://') || p.startsWith('https://')) return p;
          if (p.startsWith('/')) return window.location.origin + p;
          return window.location.origin + '/storage/' + p;
        };

        if (data.image_url) data.image_url = normalize(data.image_url);
        if (Array.isArray(data.images)) {
          data.images = data.images.map((img) => {
            if (!img) return null;
            if (typeof img === 'string') return normalize(img);
            if (typeof img === 'object') return normalize(img.image_url || img.url || '');
            return null;
          }).filter(Boolean);
        } else data.images = [];

        if (!data.image_url && data.images && data.images.length) data.image_url = data.images[0];

        // update document title and URL to reflect villa name
        try {
          const slugify = (s) =>
            String(s || '')
              .toLowerCase()
              .trim()
              .replace(/[^a-z0-9\s-]/g, '')
              .replace(/\s+/g, '-')
              .replace(/-+/g, '-');

          if (typeof window !== 'undefined') {
            const title = `KAMAR TAMU ${data.name || ''} - KamarTamu`;
            document.title = title;
            const slug = slugify(data.name || id);
            const newUrl = `/property/${id}${slug ? '-' + slug : ''}`;
            window.history.replaceState({}, title, newUrl);
          }
        } catch (e) {
          // ignore history errors
        }

        setProperty(data);
        setLoading(false);
      })
      .catch((err) => {
        console.error(err);
        setLoading(false);
      });
  }, [id]);

  if (loading) return <div className="p-10 text-center">Loading...</div>;
  if (!property) return <div className="p-10 text-center">Villa not found.</div>;

  return (
    <div className="min-h-screen bg-[#FFFBDE] font-montserrat">
      <div className="max-w-6xl mx-auto px-6 py-20">
        <div className="lg:flex lg:items-start lg:gap-12">
          {/* Foto */}
          <div className="lg:w-1/2 mb-10 lg:mb-0 flex justify-center">
            <div className="bg-white rounded-md shadow-md overflow-hidden w-[420px] h-[520px]">
              <PropertySlider images={property.images} fallback={property.image_url} altText={property.name} />
            </div>
          </div>

          {/* Detail */}
          <div className="lg:w-1/2 flex flex-col justify-between">
            <div>
              <h1 className="font-extrabold text-4xl md:text-5xl lg:text-6xl leading-tight mb-6 uppercase">
                <span className="block">KAMAR TAMU</span>
                <span className="block">{property.name}</span>
              </h1>

              <div className="text-lg space-y-2 mb-6">
                <p>
                  <span className="font-semibold">Capacity :</span>{' '}
                  {property.capacity ? `${property.capacity} people` : '-'}
                </p>
                <p>
                  <span className="font-semibold">Max :</span>{' '}
                  {property.max_capacity ? `${property.max_capacity} People` : '-'}
                </p>
              </div>

              <div className="text-lg space-y-2 mb-6">
                <p>
                  Weekday :{' '}
                  <span className="font-semibold">{formatPrice(property.weekday_price)}</span>
                </p>
                <p>
                  Weekend/Hari Libur :{' '}
                  <span className="font-semibold">{formatPrice(property.weekend_price)}</span>
                </p>
                <p>
                  Hari Besar/Libur Panjang :{' '}
                  <span className="font-semibold">{formatPrice(property.holiday_price)}</span>
                </p>
                {property.note && <p className="text-sm text-gray-600">{property.note}</p>}
              </div>
            </div>

            {/* Kontak & Back */}
            <div className="flex items-center justify-between mt-6">
              <a
                href={property.phone_number ? 'https://wa.me/' + property.phone_number.replace(/\D/g, '') : '#'}
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center gap-3 text-lg text-black"
              >
                <span className="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.486 2 2 6.201 2 11c0 2.09.875 4.005 2.34 5.469L2 22l5.703-2.273A9.77 9.77 0 0012 20c5.514 0 10-4.201 10-9s-4.486-9-10-9zm0 16a7.74 7.74 0 01-4.086-1.129l-.293-.176-3.387 1.35 1.297-3.457-.188-.301A7.327 7.327 0 014 11c0-4.065 3.589-7 8-7s8 2.935 8 7-3.589 7-8 7z" /></svg>
                </span>
                <span className="text-lg">{property.phone_number || '-'}</span>
              </a>

              <a href="/" className="inline-block bg-yellow-400 text-black px-6 py-2 rounded-full shadow-md">BACK</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
