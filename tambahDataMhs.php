<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0077ffff;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #ffffffff;
        }

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
        }

        .radio-group,
        .checkbox-group {
            margin-bottom: 10px;
        }

        .radio-group label,
        .checkbox-group label {
            margin-right: 15px;
            font-weight: normal;
        }

        input[type="submit"] {
            background: #3498db;
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 6px;
            width: 100%;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #217dbb;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 18px;
            }
        }
    </style>
</head>
<body>

    <h2>Form Input Mahasiswa</h2>

    <div class="form-container">

        <form action="simpanDataMhs.php" method="POST">

            <label>NIM:</label>
            <input type="text" name="nim" required>

            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tempat Lahir:</label>
            <input type="text" name="tempatLahir" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggalLahir" required>

            <label>Jumlah Saudara:</label>
            <input type="number" name="jmlSaudara" required>

            <label>Alamat:</label>
            <textarea name="alamat" rows="4"></textarea>

            <label>Kota:</label>
            <select name="kota">
                <option>Semarang</option>
                <option>Solo</option>
                <option>Brebes</option>
                <option>Kudus</option>
                <option>Demak</option>
                <option>Salatiga</option>
            </select>

            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label><input type="radio" name="jk" value="L" required> Laki-laki</label>
                <label><input type="radio" name="jk" value="P" required> Perempuan</label>
            </div>

            <label>Status:</label>
            <div class="radio-group">
                <label><input type="radio" name="statusKeluarga" value="K" required> Kawin</label>
                <label><input type="radio" name="statusKeluarga" value="B" required> Belum Kawin</label>
            </div>

            <label>Hobi (boleh lebih dari satu):</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
                <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
                <label><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
                <label><input type="checkbox" name="hobi[]" value="Traveling"> Traveling</label>
            </div>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Simpan">

        </form>

    </div>

</body>
</html>
