import React, { useEffect, useState } from "react";
import { useParams, Link } from "react-router-dom";

export default function PropertyDetail() {
  const { id } = useParams();
  const [property, setProperty] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch(`http://127.0.0.1:8000/api/properties/${id}`)
      .then((res) => res.json())
      .then((data) => {
        setProperty(data);
        setLoading(false);
      });
  }, [id]);

  if (loading) return <p>Loading...</p>;
  if (!property) return <p>Villa not found.</p>;

  return (
    <div className="detail-page" style={{ padding: "40px" }}>
      <div className="detail-container" style={{ display: "flex", gap: "40px" }}>
        {/* Main Image */}
        <div style={{ flex: "1" }}>
          <img
            src={property.image_url}
            alt={property.name}
            style={{ width: "100%", borderRadius: "12px" }}
          />
        </div>

        {/* Detail Info */}
        <div style={{ flex: "1" }}>
          <h1>{property.name}</h1>
          <h3>{property.location}</h3>
          <p><b>Capacity:</b> {property.capacity} people</p>
          <p><b>Weekday:</b> {property.weekday_price} IDR</p>
          <p><b>Weekend:</b> {property.weekend_price} IDR</p>
          <p><b>Holiday:</b> {property.holiday_price} IDR</p>
          <p>{property.description}</p>

          {/* WhatsApp Contact */}
          <a
            href={`https://wa.me/${property.phone_number.replace(/\D/g, "")}`}
            target="_blank"
            rel="noopener noreferrer"
            style={{
              display: "inline-block",
              marginTop: "10px",
              padding: "10px 20px",
              backgroundColor: "#25D366",
              color: "white",
              borderRadius: "8px",
              textDecoration: "none",
              fontWeight: "bold"
            }}
          >
            WhatsApp
          </a>

          {/* Back button */}
          <div style={{ marginTop: "20px" }}>
            <Link to="/" style={{
              background: "#f2b233",
              padding: "8px 16px",
              borderRadius: "6px",
              textDecoration: "none",
              color: "#000"
            }}>
              Back
            </Link>
          </div>
        </div>
      </div>

      {/* Gallery */}
      <div style={{ marginTop: "40px" }}>
        <h3>Gallery</h3>
        <div style={{ display: "flex", gap: "15px", overflowX: "auto" }}>
          {property.images.map((img, idx) => (
            <img
              key={idx}
              src={img}
              alt={`Gallery ${idx}`}
              style={{ width: "200px", borderRadius: "8px" }}
            />
          ))}
        </div>
      </div>
    </div>
  );
}
