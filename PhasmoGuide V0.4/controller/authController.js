// authController.js

const User = require('../model/user');

// Simulación de una base de datos o almacenamiento en memoria
let users = [];

// Función para registrar un nuevo usuario
function registerUser(name, email, password) {
    const newUser = new User(name, email, password);
    users.push(newUser);
    console.log('Nuevo usuario registrado:', newUser);
    return true; // Registro exitoso
}

// Función para iniciar sesión
function loginUser(email, password) {
    const user = users.find(user => user.email === email && user.password === password);
    if (user) {
        console.log('Inicio de sesión exitoso:', user);
        return true; // Inicio de sesión exitoso
    }
    return false; // Usuario no encontrado o contraseña incorrecta
}

module.exports = {
    registerUser,
    loginUser
};
