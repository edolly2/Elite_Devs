import React, { useState } from "react";
import {
  BrowserRouter as Router,
  Route,
  Link,
  useHistory,
} from "react-router-dom";
import "./NoMemberNavBar.css";
import Logo from "../_assets/edlogo.svg";
import styled from "styled-components";
import { AccountBox } from "./_accountBox";

const Btn = styled.button`
  min-width: 10rem;
  padding: 0.4rem 0;
  font-size: 1.6rem;
  font-weight: 700;
  border: 2px solid var(--clr-dp);
  background-color: transparent;
  color: white;
  &:hover {
    border: 2px solid var(--clr-dp);
    background-color: var(--clr-dp);
    color: white;
    cursor: pointer;
    transform: scale(1.1, 1.1);
  }
`;

const LoginContainer = styled.div`
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
  // display: none;
  // background-color: black;
  // z-index: 10;
`;

function NoMemberNavBar(props) {
  const [modalActive, setModalActive] = useState(false);

  return (
    <div className="navBarCont">
      <nav>
        <div className="wrapper">
          <img className="site-brand" src={Logo} alt="" />
          <ul className="navBar-ul-1">
            <li>
              <Link to="/">HOME</Link>
            </li>
            <li>
              <Link to="/browse">BROWSE</Link>
            </li>
            <li>
              <Link to="/catalog">CATALOG</Link>
            </li>
            <li>
              <Link to="/enterprise">ENTERPRISE</Link>
            </li>
            <li>
              <Link to="/individuals">INDIVIDUALS</Link>
            </li>
            <li>
              <Link to="/resources">RESOURCES</Link>
            </li>
          </ul>
        </div>
        {/* <SearchBar /> */}
        <ul className="navBar-ul-2">
          <li>
            <Btn
              onClick={(e) => {
                setModalActive(true);
                console.log(modalActive);
              }}
            >
              Login
            </Btn>
          </li>
          <li>
            <Link to="/sign-up">
              {/* <BTN
                btnContainer="btnCont"
                btnClass="btn"
                btnText="Try Free"
              ></BTN> */}
            </Link>
          </li>
        </ul>
      </nav>
      <LoginContainer>
        <div
          style={
            modalActive
              ? { display: "flex" }
              : { display: "none", zIndex: "10" }
          }
        >
          <AccountBox />
        </div>
      </LoginContainer>
    </div>
  );
}

export default NoMemberNavBar;
