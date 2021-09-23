import React from "react";
import "./Footer.css";

function Footer() {
   function getCurrentDate() {
    var myCurrentDate = new Date();
    var date = myCurrentDate.getFullYear() + '-' + (myCurrentDate.getMonth()+1) + '-' + myCurrentDate.getDate() +' '+ myCurrentDate.getHours()+':'+ myCurrentDate.getMinutes()+':'+ myCurrentDate.getSeconds();
    const newCurrentDate = "Current Date and Time: "+date;
    return (
      <p>{newCurrentDate}</p>
    );
  }
  return (
    <div className="footerCont">
      <footer>
        <small>&#169;copyright {() => {getCurrentDate()}} </small>
      </footer>
    </div>
  );
}

export default Footer;
