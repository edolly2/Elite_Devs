import React, { useState } from "react";
import "./Header.css";
import MemberNavBar from "./MemberNavBar";
import NoMemberNavBar from "./NoMemberNavBar";

function Header(props) {
  const [memberNavBar, setMemberNavBar] = useState(false);
  // const memberNavBarHandler = () => {
  //     if(!memberNavBar) {
  //         return '<MemberNavBar className="navBarCont hidden"/>'
  //     }
  //     else {
  //         setMemberNavBar(true);
  //         return '<MemberNavBar className="navBarCont"/>'

  //     }
  // }

  return (
    <div className="headerCont">
      <header>
        <MemberNavBar />
        <NoMemberNavBar />
      </header>
    </div>
  );
}

export default Header;
