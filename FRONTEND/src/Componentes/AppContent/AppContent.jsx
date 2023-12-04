import { Route, Routes, Navigate, BrowserRouter } from "react-router-dom";
import Login from "../Login/login.jsx";
import Dashboard from "../dashboard/Dashboard.jsx";
import { useUser } from "../Login/UserContext.jsx";
import Register from "../Register/Register.jsx";
import Usuario from "../Usuarios/Usuario.jsx";
const AppContent = () => {
  const { user } = useUser();
  return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Login />} />
          {console.log(user)}
          <Route path="/register" element={<Register />} />
          <Route
            path="/dashboard"
            element={user ? <Dashboard /> : <Navigate to="/" />}
          />
          <Route
            path="/usuarios"
            element={user ? <Usuario /> : <Navigate to="/" />}
          />
        </Routes>
      </BrowserRouter>
    </div>
  );
};

export default AppContent;
