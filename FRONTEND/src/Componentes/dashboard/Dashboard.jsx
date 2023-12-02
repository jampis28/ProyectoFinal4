import LogOut from "../Login/LogOut";
import Slidenavs from "./Slidenavs";

function Dashboard() {
  const { LogoutButton } = LogOut();
  return (
    <>
      <Slidenavs></Slidenavs>
    </>
  );
}

export default Dashboard;
