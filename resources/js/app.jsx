import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Login from './Pages/Auth/Login';
import Register from './Pages/Auth/Register';
import Servicios from './Pages/Profile/Servicios';
import Pago from './Pages/Profile/Pago';

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Login />} />
        <Route path="/register" element={<Register />} />
        <Route path="/servicios" element={<Servicios />} />
        <Route path="/pago" element={<Pago />} />
      </Routes>
    </BrowserRouter>
  );
}
