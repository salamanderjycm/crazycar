import React, { useEffect, useState } from 'react';
import axios from 'axios';

export default function Servicios() {
  const [servicios, setServicios] = useState([]);
  const [reservaId, setReservaId] = useState(null);

  useEffect(() => {
    axios.get('/api/servicios').then(response => setServicios(response.data));
  }, []);

  const reservar = async (servicioId) => {
    try {
      const token = localStorage.getItem('token');
      const response = await axios.post('/api/reservas', {
        servicio_id: servicioId,
        fecha: new Date().toISOString().split('T')[0]
      }, {
        headers: { Authorization: `Bearer ${token}` }
      });
      setReservaId(response.data.id);
      alert('Reserva creada. Procede al pago.');
    } catch (err) {
      alert('Error al reservar.');
    }
  };

  return (
    <div className="p-6">
      <h2>Servicios Disponibles</h2>
      {servicios.map(servicio => (
        <div key={servicio.id}>
          <h3>{servicio.nombre}</h3>
          <p>{servicio.descripcion}</p>
          <p>Precio: S/. {servicio.precio}</p>
          <button onClick={() => reservar(servicio.id)}>Reservar</button>
        </div>
      ))}
    </div>
  );
}
