const API_BASE = "/api";

// GET: ambil semua property
export async function getProperties() {
    const res = await fetch(`${API_BASE}/properties`);
    if (!res.ok) throw new Error("Failed to fetch properties");
    return res.json();
}

// GET: ambil detail property
export async function getProperty(id) {
    const res = await fetch(`${API_BASE}/properties/${id}`);
    if (!res.ok) throw new Error("Failed to fetch property");
    return res.json();
}
