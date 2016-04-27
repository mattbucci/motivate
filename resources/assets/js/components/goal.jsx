
import React from 'react';

class Preview extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            id: this.props.id,
            category: this.props.category,
            name: this.props.name,
            description: this.props.description
        };

    }
    render() {
        return (
            <a className="col-md-4" href={"/goal/" + this.state.id}>
                <div className="goal">
                    <div className="icon-holder">
                            <img src={"img/icons/" + this.state.category + ".png"} alt="" className="icon" />
                    </div>
                    <h4 className="heading">{this.state.name}</h4>
                    <p className="description">{this.state.description}</p>
                </div>
            </a>
        );
    }
}

class Page extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            id: this.props.id,
            category: this.props.category,
            name: this.props.name,
            description: this.props.description
        };

    }
    render() {
        return (
            <a className="col-md-4" href={"/goal/" + this.state.id}>
                <div className="goal">
                    <div className="icon-holder">
                        <img src={"img/icons/" + this.state.category + ".png"} alt="" className="icon" />
                    </div>

                    <h4 className="heading">{this.state.name}</h4>
                    <p className="description">{this.state.description}</p>
                </div>
            </a>
        );
    }
}


export default {Preview, Page};