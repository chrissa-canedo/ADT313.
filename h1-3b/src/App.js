import './App.css';
import logo from  './logo.svg';
import Name from './components/user/name';
import Section from './components/user/section';
import Description from './components/user/description';

function App() {
  return (
    <div className="App">
      <Name/>
      <Section/>
      <Description/>
  </div>
  );
}

export default App;
