<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tarif Cetak - Percetakan Super Naya</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #f7f9fc 0%, #eef3f8 100%);
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
            padding: 32px 28px;
        }

        h2 {
            margin: 0 0 10px;
            font-size: 2rem;
            color: #0f172a;
        }

        .subtitle {
            margin: 0 0 24px;
            color: #475569;
            font-size: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
            background: #fff;
        }

        th, td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f1f5f9;
            color: #0f172a;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        td {
            font-size: 1rem;
            color: #334155;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .harga {
            font-weight: bold;
            color: #15803d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Tarif Cetak</h2>
        <p class="subtitle">Pilih ukuran kertas, tipe warna cetak, dan bandingkan harga per halaman dengan mudah.</p>

        <table>
            <thead>
                <tr>
                    <th>Ukuran Kertas</th>
                    <th>Warna Cetak</th>
                    <th>Tarif per Halaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A4</td>
                    <td>Hitam Putih</td>
                    <td class="harga">Rp 500</td>
                </tr>
                <tr>
                    <td>A4</td>
                    <td>Warna</td>
                    <td class="harga">Rp 1.500</td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td>Hitam Putih</td>
                    <td class="harga">Rp 700</td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td>Warna</td>
                    <td class="harga">Rp 1.800</td>
                </tr>
                <tr>
                    <td>A3</td>
                    <td>Hitam Putih</td>
                    <td class="harga">Rp 1.200</td>
                </tr>
                <tr>
                    <td>A3</td>
                    <td>Warna</td>
                    <td class="harga">Rp 3.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
