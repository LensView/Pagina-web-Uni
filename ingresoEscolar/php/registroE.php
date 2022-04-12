<!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/registroE.css">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        
 </head>
 <body class="p-3 mb-2 bg-primary text-white">

<div class="container">
        <form action="">
                                        <h1>Registro de estudiante</h1>
                <label>Nombre*</label> <br>
                <input type="text" placeholder="Nombre" required><br><br>
                <label>Apellido Paterno*</label><br>
                <input type="text" placeholder="Apellido Paterno" required><br><br>
                <label>Apellido Materno*</label><br>
                <input type="text" placeholder="Apellido Materno" required><br><br>
                <label>¿Cuál es el estado de procedencia?</label><br>
                <input type="text" placeholder="Estado de procedencia"><br><br>
                <label>Especialidad del bachiller</label><br>
                <input type="text" placeholder="Especialidad"><br><br>
                        <h2>Seleccionar la carrera que se desea estudiar*</h2>
                          <h3>Facultad de Ciencias de la computación</h3>
                                <select name="" id="" class="form-control">
                                        <option value="">Ninguno</option>
                                         <option value="">Ingeniería en Tecnologías de la Información</option>
                                        <option value="">Ingeniería en Ciencias de la Computación</option>
                                </select>
                          <h3>Facultad de Ciencias de la Electrónica</h3>
                                <select name="" id="" class="form-control">
                                        <option value="">Ninguno</option>
                                        <option value="">Ingeniería en Mecatrónica</option>
                                        <option value="">Licenciatura en Gestión de Ciudades Inteligentes y Transacciones Tecnológicas</option>
                                </select>
                          <h3>Facultad de Ciencias Físico Matemáticas</h3>
                                <select name="" id="" class="form-control">
                                        <option value="">Ninguno</option>
                                        <option value="">Licenciatura en Matemáticas Aplicadas</option>
                                        <option value="">Licenciatura en Física Aplicada</option>
                                </select>
                          <h3>Facultad de Ingeniería</h3>
                                <select name="" id="" class="form-control">
                                        <option value="">Ninguno</option>
                                        <option value="">Ingeniería Civil</option>
                                        <option value="">Ingeniería Geofísica</option>
                                </select>
                          <h3>Facultad de Medicina</h3>
                                <select name="" id="" class="form-control">
                                        <option value="">Ninguno</option>
                                        <option value="">Licenciatura en Biomedicina</option>
                                        <option value="">Licenciatura en Ciencia Forense</option>
                                </select>
                        <br><br>
    
                <label>¿Por qué eligio esta carrera?</label><br>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea><br><br>
                <label>Seleccione el periodo a ingresar</label><br>
                        <select name="" id="" class="form-control">
                                <option value="">Ninguno</option>
                                <option value="">Cuatrimestre 2020</option>
                                <option value="">Semestre 2020</option>
                        </select>
                <br><br>

                <label>Ingresa tu teléfono</label><br>
                <input type="tel" placeholder="(000) 000-0000" 
                pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" 
                title="A valid telephone number consist of a 3 digits code area between brackets, 
                 space, the three first digits of the number, a space or hypen (-), and four more 
                 digits" 
                required><br><br>
                <label>Ingrese un correo*</label><br> 
                <input type="email" placeholder="email@ejemplo.com" required ><br><br>
                <label>De una contraseña*</label><br>
                <input type="password" placeholder="Password" required><br><br>
                <label>Confirme contraseña*</label><br>
                <input type="password" placeholder="Password" required><br><br>
                <button type="submit" class="btn btn-success">Registrar</button>
                <br><br>
        </form>
        
</div>
</body>
 </html>