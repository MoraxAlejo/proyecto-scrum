<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <title>Funval Internacional: Entrar al sitio</title>
</head>

<body>
  <main class="h-screen flex justify-center items-center bg-[url('/img/fondo.png')] bg-cover">
    <div class="bg-white flex p-10 rounded-lg">

      <section class="pr-4 flex flex-col items-center">
        <img src="/img/logo.png" alt="logo" class="w-[330px]">

        <form action="./loginAction.php" method="" class="flex flex-col gap-5 items-center">

          <input type="text" id="name" class="mt-2 bg-gray-50 border border-slate-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[300px] p-3 " placeholder="Nombre de usuario">

          <input type="password" id="contrasena" class="bg-gray-50 border border-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-[300px] p-3 " placeholder="Contraseña">

          <button type="submit" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 mb-5 dark:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none dark:focus:ring-blue-800 w-[300px]">Acceder</button>

        </form>

        <a href="#" class=" text-blue-800">¿Olvidó su contraseña?</a>
      </section>

      <div class="w-[1px] bg-gray-300"></div>

      <section class="flex flex-col justify-evenly items-center p-6">
        <div class="flex flex-col items-center gap-3 ">
          <h4>Ingresar con</h4>
          <a href="#" class="flex border border-gray-300 p-1 px-3 rounded-lg gap-1"><img src="/img/key.svg" width="25" alt="key">SSO</a>
        </div>
        <div class="flex gap-6 pr-2">
          <a href="#" class="text-blue-800">Español - Internacional (es)</a>
          <div class="flex">
            <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/000000/help.png" alt="help" />
            <a href="#" class="w-[60px] text-blue-800">Aviso de Cookies</a>
          </div>
        </div>
      </section>
    </div>
  </main>
</body>

</html>