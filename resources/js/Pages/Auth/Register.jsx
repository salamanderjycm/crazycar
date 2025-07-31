import React, { useState } from 'react';
import axios from 'axios';

export default function Register() {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleRegister = async (e) => {
    e.preventDefault();
    try {
      await axios.post('/api/register', { name, email, password });
      alert('Registro exitoso. Ahora inicia sesión.');
    } catch (error) {
      alert('Error en el registro.');
    }
  };

  return (
    <div className="p-6">
      <h2>Registrarse</h2>
      <form onSubmit={handleRegister}>
        <input type="text" placeholder="Nombre" onChange={(e) => setName(e.target.value)} required />
        <input type="email" placeholder="Correo" onChange={(e) => setEmail(e.target.value)} required />
        <input type="password" placeholder="Contraseña" onChange={(e) => setPassword(e.target.value)} required />
        <button type="submit">Registrarse</button>
      </form>
    </div>
  );
}
