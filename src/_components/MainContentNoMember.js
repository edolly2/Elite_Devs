import React from "react";
import "./MainContentNoMember.css";
import BTN from "./BTN";

function MainContentNoMember() {
  return (
    <div className="mainContentNoMemberCont">
      <main>
        <h1>EliteDevs</h1>
        <h3 className="punchline">Become the future of Web Development</h3>
        <hr />
        <div className="mainBoxCont">
          <div className="mainBoxLeft">
            <ul>
              <li>Keep up with industry standards</li>
              <li>Gain access to the best tools and resources</li>
              <li>Further your Web Development career</li>
              <li>Learn everything you need to know to land your dream job</li>
            </ul>
          </div>
          <div className="mainBoxRight">
            <h3>Get Your <span className="pink">7-Day</span> Free Trial!</h3>
          <BTN btnContainer="btnCont" btnClass="btn" btnText="Try Free" />
          </div>
        </div>
      </main>
    </div>
  );
}

export default MainContentNoMember;
