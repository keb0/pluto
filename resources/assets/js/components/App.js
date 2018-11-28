import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from './Header.js';
import Board from './Board.js';
import Form from './Form.js';

export default class App extends Component {
  render() {
    return (
      <div>
        <Header />
        <Board />
        <Form />
      </div>
    );
  }
}

if (document.getElementById('root')) {
  ReactDOM.render(<App />, document.getElementById('root'));
}
