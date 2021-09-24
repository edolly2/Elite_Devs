import "./App.css";
import Header from "./_components/Header";
import Footer from "./_components/Footer";
import MainContentNoMember from "./_components/MainContentNoMember";

function App() {
  return (
    <div className="App">
      {/* <div className="headerWrapper"> */}
        <Header />
      {/* </div> */}
      <MainContentNoMember />
      <Footer />
    </div>
  );
}

export default App;
