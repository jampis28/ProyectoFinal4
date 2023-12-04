import axios from "axios";
import { useNavigate } from "react-router-dom";
import { useUser } from "./UserContext";
function LogOut() {
  const navigate = useNavigate();
  const { user, updateUser } = useUser();
  const LogoutButton = () => {
    const handleLogout = async () => {
      try {
        await axios.post("http://127.0.0.1:8000/api/logout", null, {
          headers: {
            Authorization: `Bearer ${user}`,
          },
        });
        updateUser("");
        navigate("/");
      } catch (error) {
        console.error("Error al cerrar sesión:", error);
      }
    };
    handleLogout();
  };
  return { LogoutButton };
}
export default LogOut;
