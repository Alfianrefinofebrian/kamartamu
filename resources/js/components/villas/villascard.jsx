import React from "react";
import { MapPin } from "lucide-react";

export default function VillaCard({ villa, onClick }) {
    return (
        <div
            className="group cursor-pointer w-full  flex flex-col"
            onClick={() => onClick && onClick(villa)}
        >
            {villa.image_url && (
                <div className="overflow-hidden">
                    <img
                        src={villa.image_url}
                        alt={villa.name}
                        className="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-300"
                        onError={(e) => {
                            e.target.src =
                                "https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=400&h=256&fit=crop&crop=center";
                        }}
                    />
                </div>
            )}

            <div className="text-left p-4 flex-grow flex flex-col">
                {/* Villa Name */}
                <h3 className="text-[15px] font-extrabold uppercase text-[#001D4A] tracking-wider min-h-[45px] mb-0">
                    KAMAR TAMU {villa.name}
                </h3>

                {/* Location */}
                <div className="flex items-center gap-2 text-[#001D4A] font-medium mb-3">
                    <MapPin className="w-5 h-5 text-[#001D4A] flex-shrink-0" />
                    <span className="text-sm">{villa.location}</span>
                </div>

                {/* Description */}
                <p className="text-sm text-[#4F637D] leading-snug flex-grow">
                    {villa.description}
                </p>
            </div>
        </div>
    );
}