import styled from "styled-components";

const StyledAlertContainer = styled.div`
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  z-index: 999;
`;

const StyledAlertMessage = styled.p`
  color: #333;
  font-size: 16px;
`;

const StyledAlert = ({ message, onClose }) => (
  <div
    id="alert-additional-content-1"
    className="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
    role="alert"
  >
    <div className="flex items-center">
      <svg
        className="flex-shrink-0 w-4 h-4 me-2"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 20 20"
      >
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span className="sr-only">Info</span>
      <h3 className="text-lg font-medium">¡EXITO!</h3>
    </div>
    <div className="mt-2 mb-4 text-sm">
      <StyledAlertMessage>{message}</StyledAlertMessage>
    </div>
    <div className="flex">
      <button
        type="button"
        onClick={onClose}
        className="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800"
        data-dismiss-target="#alert-additional-content-1"
        aria-label="Close"
      >
        CLOSE
      </button>
    </div>
  </div>
);

export default StyledAlert;
