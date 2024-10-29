<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InstaMoment</title>   

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 font-sans">

  <header class="fixed top-0 w-full z-50 bg-gradient-to-r from-gray-900 to-gray-800 py-4 px-4 md:px-8">
    <div class="container flex justify-between items-center mx-auto">
      <div class="flex items-center">
        <h1 class="text-white text-xl font-bold">InstaMoment</h1>
      </div>
      <nav class="hidden md:flex space-x-4">
        <a href="#home" class="text-white hover:text-blue-500">Home</a>
        <a href="#services" class="text-white hover:text-blue-500">Koleksi</a>
        <a href="#pantai" class="text-white hover:text-blue-500">Menu</a>
        <a href="#Contact" class="text-white hover:text-blue-500 active">Contact Us</a>
      </nav>
      <button type="button" class="md:hidden focus:outline-none text-white hover:text-blue-500" id="menu-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16v12H4zm2-2a2 2 0 1 0-4 0 2 2 0 0 0 4z" />
        </svg>
      </button>
    </div>
  </header>

  <div id="menu" class="fixed top-0 left-0 w-full h-full overflow-auto bg-gray-900 md:hidden">
    <div class="container mx-auto pt-8 px-4">
      <nav class="flex flex-col space-y-4">
        <a href="#home" class="text-white text-xl font-bold pb-2 border-b border-gray-700">InstaMoment</a>
        <a href="#home" class="text-white hover:text-blue-500">Home</a>
        <a href="#services" class="text-white hover:text-blue-500">Koleksi</a>
        <a href="#pantai" class="text-white hover:text-blue-500">Menu</a>
        <a href="#Contact" class="text-white hover:text-blue-500">Contact Us</a>
      </nav>
    </div>
  </div>

  <main class="py-20">

    <section id="home" class="hero min-h-screen bg-cover bg-center" style="background-image: url('Background.jpg')">
      <div class="container flex items-center justify-center h-full">
        <div class="box text-center text-white">
          <h1 class="text-4xl font-bold mb-8">Jasa Foto dan Cetak Foto</h1>
          <p class="text-xl mb-8">Tuangkan moment-moment indah dalam bentuk polaroid</p>
          <button type="button" class="bg-blue-500 text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selengkapnya