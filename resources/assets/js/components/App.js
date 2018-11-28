import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class App extends Component {
  render() {
    return (
      <div>
        <nav className="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
          <a className="navbar-brand" href="#">
            <i className="material-icons text-light mt-2">chevron_left</i>
          </a>
        </nav>
        <main className="mt-2 mb-2">
          <div className="container">
            <div className="row mb-2">
              <div className="col-9">
                <div className="card bg-light">
                  <div className="card-body">
                    <p className="card-text">Some text inside the first card</p>
                  </div>
                </div>
              </div>
              <div className="col-3"></div>
            </div>
            <div className="row mb-2">
              <div className="col-3"></div>
              <div className="col-9">
                <div className="card bg-light">
                  <div className="card-body">
                    <p className="card-text">Some text inside the first card</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer className="fixed-bottom p-1 bg-light">
          <div className="container">
            <form>
              <div className="form-row">
                <div className="col-auto">
                  <i className="material-icons mt-2">add</i>
                  <i className="material-icons mt-2">mic</i>
                  <i className="material-icons mt-2">camera_alt</i>
                </div>
                <div className="col">
                  <input type="text" className="form-control" placeholder="Aa" />
                </div>
                <div className="col-auto">
                  <button type="submit">
                    <i className="material-icons text-primary mt-2">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </footer>
      </div>
    );
  }
}

if (document.getElementById('root')) {
  ReactDOM.render(<App />, document.getElementById('root'));
}
