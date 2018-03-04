// language=JSX Harmony
import React from 'react'
import ReactDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Route,
    Link,
    Switch
} from 'react-router-dom'

import Home_component from './components/view/home-component'

const Home = () => (
    <Home_component />
)


const About = () => (
    <div>
        <h2>About</h2>
    </div>
)

const App = () => (
    <Router>
      <Switch>
        <div>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/about">About</Link></li>
            </ul>
            <hr/>

            <Route exact path="/" render={props => <Home {...props} />} />
            <Route path="/about" component={About}/>
        </div>
      </Switch>

    </Router>
)

export default App;
ReactDOM.render(<App />, document.getElementById('root'));
