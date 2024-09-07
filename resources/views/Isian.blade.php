<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
  <title>Quizz</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-teal-700 font-inter">
    <div class="navbar bg-teal-700 p-6 fixed top-0 left-0 w-full z-10 h-24 shadow-lg">
      <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
          <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 text-xl rounded inline-flex items-center">
            <svg class="h-8 w-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
          </button>
          <select id="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-4">
            <option value="Isian Singkat">Isian Singkat</option>
            <option value="Esai">Esai</option>
            <option value="Pilihan Ganda">Pilihan Ganda</option>
          </select>
        </div>
        <div class="flex items-center">
          <div class="flex items-center mr-4">
            <select id="point" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <option value="1">1 Point</option>
              <option value="2">2 Point</option>
              <option value="3">3 Point</option>
              <option value="4">4 Point</option>
              <option value="5">5 Point</option>
            </select>
          </div>
          <div class="flex items-center mr-4">
            <select id="detik" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <option value="10">10 Detik</option>
              <option value="20">20 Detik</option>
              <option value="30">30 Detik</option>
              <option value="40">40 Detik</option>
              <option value="50">50 Detik</option>
            </select>
          </div>
          <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline ml-auto">
            Simpan Soal
          </button>
        </div>
      </div>
    </div>
    <div class="container mx-auto p-6 mt-52 bg-gray-100 rounded-lg shadow-lg w-2/4">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <h2 class="text-xl font-bold">Buat Pertanyaan</h2>
        </div>
      </div>
      <div class="border border-gray-300 rounded-lg p-4 mb-4 shadow w-full mx-auto">
        <textarea class="w-full shadow mt-2 h-60 resize-none border-gray-300 rounded-lg p-2 focus:outline-none focus-shadow-outline" placeholder="Ketik untuk menambahkan pertanyaan..."></textarea>
      </div>
      <div class="border border-gray-300 rounded-lg p-4 mb-4 shadow w-full mx-auto">
        <h3 class="text-lg font-bold mb-2">Jawaban Siswa</h3>
        <textarea class="w-full h-16 resize-none shadow border-gray-300 rounded-lg p-2 focus:outline-none focus-shadow-outline" placeholder="Ketik Jawaban Disini..."></textarea>
      </div>
    </div>
  </body>
</html>