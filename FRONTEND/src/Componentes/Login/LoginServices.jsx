import { useNavigate } from "react-router-dom";
import { useState} from "react";
import { useUser } from './UserContext';
import axios from "axios";
function LoginServices() {
  const [login, setLogin] = useState({
    email: "",
    password: "",
  });
  const { updateUser } = useUser();

  const handleInputChange = (e) => {
    e.preventDefault();
    const { name, value } = e.target;
    setLogin((prevLogin) => ({
      ...prevLogin,
      [name]: value,
    }));
    console.log(login);
  };
  const navigate = useNavigate();

  const handleLogin = async (e) => {
    e.preventDefault();
    const email = login.email;
    const password = login.password;
    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/login",
        {
          email: email,
          password: password,
        },
        {
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
        }
      );
      console.log(response.data);
      updateUser(response.data.token);
      if (response.data.token) {
        navigate('/dashboard',{ replace: true }); // Ajusta la ruta según tu configuración
      } else {
        navigate('/');
      }
    } catch (error) {
      console.error("Error al iniciar sesión:", error.response.data);
    }
  };

  return { handleInputChange, handleLogin};
}
export default LoginServices;
