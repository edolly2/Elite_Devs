import "./App.css";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import styled from "styled-components";
import Header from "./_components/Header";
import Footer from "./_components/Footer";
import MainContentNoMember from "./_components/MainContentNoMember";
import { AccountBox } from "./_components/_accountBox";
import { useState } from "react";

const AppContainer = styled.div`
  // width: 100%;
  // height: 100%;
  // display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 19px;
  display: none;
  // background-color: black;
`;

function App() {
  const [modalActive, setModalActive] = useState(false);
  console.log(modalActive);
  return (
    <Router>
      <div className="App">
        <Header onClick={() => setModalActive(true)} />
        <div className="content">
          <Switch>
            <Route exact path="/">
              <MainContentNoMember />
            </Route>
          </Switch>
        </div>
        <Footer />
        <div className="modalOverlay"></div>
      </div>
      <AppContainer style={{ display: modalActive ? "flex" : "none" }}>
        <AccountBox />
      </AppContainer>
    </Router>
  );
}

export default App;
