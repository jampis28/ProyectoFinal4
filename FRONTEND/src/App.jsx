import { UserProvider } from './Componentes/Login/UserContext.jsx';
import AppContent from './Componentes/AppContent/AppContent.jsx'
function App() {
  return (
    <>
    <UserProvider>
      <AppContent />
    </UserProvider>
    </>
  );
}

export default App;
