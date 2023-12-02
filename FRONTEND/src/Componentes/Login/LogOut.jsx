import axios from "axios";
import { useNavigate } from "react-router-dom";
function LogOut() {
    const navigate = useNavigate();
  const LogoutButton = () => {
    const handleLogout = async () => { 
      try {
        await axios.post('http://127.0.0.1:8000/api/logout');
        navigate('/');
      } catch (error) {
        console.error('Error al cerrar sesión:', error);
      }
    };
    handleLogout();
  };
  return { LogoutButton};
}
export default LogOut;