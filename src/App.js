import "./App.css";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import styled from "styled-components";
import Header from "./_components/Header";
import Footer from "./_components/Footer";
import MainContentNoMember from "./_components/MainContentNoMember";
import { AccountBox } from "./_components/_accountBox";
import { useState } from "react";

function App() {
  return (
    <Router>
      <div className="App">
        <Header />
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
    </Router>
  );
}

export default App;
