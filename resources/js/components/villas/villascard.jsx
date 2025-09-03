import React from "react";
import { MapPin } from "lucide-react";

export default function VillaCard({ villa, onClick }) {
    return (
        <div
            className="group cursor-pointer"
            onClick={() => onClick && onClick(villa)}
        >
            {villa.image_url && (
                <div className="overflow-hidden mb-4">
                    <img
                        src={villa.image_url}
                        alt={villa.name}
                        className="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                        onError={(e) => {
                            e.target.src =
                                "https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=400&h=256&fit=crop&crop=center";
                        }}
                    />
                </div>
            )}



           <div className="text-left px-2">
    {/* Villa Name */}
    <h3 className="text-[20px] font-extrabold uppercase text-[#001D4A] mb-3 font-montserrat tracking-wide">
        {villa.name}
    </h3>

    {/* Location */}
    <div className="flex items-center gap-2 text-[#001D4A] font-medium mb-4">
        <MapPin className="w-5 h-5 text-[#001D4A]" />
        <span className="text-base">{villa.location}</span>
    </div>

    {/* Description */}
    <p className="text-base text-gray-700 leading-relaxed line-clamp-3">
        {villa.description}
    </p>
</div>

        </div>
    );
}
