import React, { useState, useEffect } from "react";
import VillaCard from "./components/villas/villascard";
import { getProperties } from "./api";
import { useNavigate } from "react-router-dom";

export default function VillasPage() {
    const [villas, setVillas] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        loadVillas();
    }, []);

    const loadVillas = async () => {
        setLoading(true);
        try {
            const data = await getProperties();
            setVillas(data);
        } catch (error) {
            console.error("Error loading villas:", error);
        }
        setLoading(false);
    };

    const handleVillaClick = (villa) => {
        if (!villa || !villa.id) return;

        const slugify = (s) =>
            String(s || '')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

        const nameSlug = slugify(villa.name || '');
        const segment = nameSlug ? `kamartamu-${nameSlug}-${villa.id}` : `kamartamu-${villa.id}`;
        // Full page navigation to server-rendered property page
        window.location.href = `/property/${segment}`;
    };

    const renderSkeletons = () =>
        [...Array(3)].map((_, i) => (
            <div
                key={i}
                className="animate-pulse min-w-[300px] max-w-[320px] flex-shrink-0"
            >
                <div className="w-full h-64 bg-gray-300 rounded-lg"></div>
                <div className="mt-4 px-2 flex flex-col">
                    <div className="h-6 bg-gray-300 rounded w-3/4 mb-3"></div>
                    <div className="h-4 bg-gray-300 rounded w-1/3 mb-4"></div>
                    <div className="h-4 bg-gray-300 rounded w-full"></div>
                    <div className="h-4 bg-gray-300 rounded w-5/6 mt-2"></div>
                </div>
            </div>
        ));

    return (
        <section className="min-h-screen bg-[#FFFBF0] py-20 font-montserrat">
            <div className="container mx-auto px-4">
                {/* Header */}
                <div className="mb-12">
                    <h2 className="text-4xl md:text-6xl font-bold text-[#00576D]">
                        VILLAS
                    </h2>
                </div>

                {/* Villas Horizontal Scroll */}
                <div className="flex gap-6 overflow-x-auto pb-4 no-scrollbar">
                    {loading
                        ? renderSkeletons()
                        : villas.map((villa) => (
                              <div
                                  key={villa.id}
                                  className="min-w-[300px] max-w-[320px] flex-shrink-0"
                              >
                                  <VillaCard
                                      villa={villa}
                                      onClick={handleVillaClick}
                                  />
                              </div>
                          ))}
                </div>

                {villas.length === 0 && !loading && (
                    <div className="text-center py-20">
                        <div className="text-[#00576D] text-xl font-medium">
                            Saat ini belum ada villa yang tersedia.
                        </div>
                    </div>
                )}
            </div>
        </section>
    );
}
