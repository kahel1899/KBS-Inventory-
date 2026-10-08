// Shared helpers for the KBS pages.

// Change this one line if your Laravel server runs somewhere else.
export const API = import.meta.env.VITE_API_URL || 'http://127.0.0.1:8000/api'

// Platform colours are used on both the dashboard and the inventory cards,
// so a platform looks the same everywhere.
export const PLATFORMS = [
    { name: 'TikTok', color: '#0FA3B1' },
    { name: 'Shopee', color: '#EE4D2D' },
    { name: 'Walk-in', color: '#7C5CFC' },
]
export const UNASSIGNED = { name: 'Unassigned', color: '#A8949F' }

export function platformColor(name) {
    return (PLATFORMS.find(p => p.name === name) || UNASSIGNED).color
}

const pesoFormat = new Intl.NumberFormat('en-PH', {
    style: 'currency',
    currency: 'PHP',
})

export function peso(value) {
    return pesoFormat.format(Number(value) || 0)
}

// ₱1.2k style, for chart axes and tight spaces
export function pesoShort(value) {
    const n = Number(value) || 0
    const sign = n < 0 ? '-' : ''
    const abs = Math.abs(n)
    if (abs >= 1000000) return `${sign}₱${trim(abs / 1000000)}M`
    if (abs >= 1000) return `${sign}₱${trim(abs / 1000)}k`
    return `${sign}₱${trim(abs)}`
}

function trim(n) {
    return String(Math.round(n * 10) / 10)
}

export function saleRevenue(sale) {
    return (Number(sale.quantity) * Number(sale.selling_price)) || 0
}

export function saleCost(sale) {
    return (Number(sale.quantity) * Number(sale.unit_cost)) || 0
}
