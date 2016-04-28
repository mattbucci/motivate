
import React from 'react';

String.prototype.capitalizeFirstLetter = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

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
                <div className="goal_preview">
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

class CreateForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            type: "basic"
        };

        this.handleTypeChange = this.handleTypeChange.bind(this);

    }

    handleTypeChange(event) {
        this.setState({
            type: event.target.value
        })
    }

    getTitle() {
        if (this.state.type == "basic") {
            return "Create a Goal."
        } else {
            return "New " + this.state.type.capitalizeFirstLetter() + " Goal."
        }
    }

    render() {
        return (
            <section className={"split-form form--" + this.state.type}>
                <div className="fit-height row">
                    <div className="fit-height col-md-6 hidden-sm hidden-xs">
                        <h1 className="split-form-title"> {this.getTitle()} </h1>
                        <div className="img-holder"></div>
                    </div>
                    <div className="fit-height col-md-6 col-sm-12">
                        <form>
                            <label className="radio">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="timed" onChange={this.handleTypeChange}/> Timed Goal
                            </label>
                            <label className="radio">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="incremental" onChange={this.handleTypeChange}/> Incremental Goal
                            </label>

                            <div className="form-group">
                                <label htmlFor="exampleInputEmail1">Email address</label>
                                <input type="email" className="form-control" id="exampleInputEmail1" placeholder="Email"/>
                            </div>
                            <div className="form-group">
                                <label htmlFor="exampleInputPassword1">Password</label>
                                <input type="password" className="form-control" id="exampleInputPassword1" placeholder="Password"/>
                            </div>
                            <div className="form-group">
                                <label htmlFor="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile"/>
                                <p className="help-block">Example block-level help text here.</p>
                            </div>
                            <div className="checkbox">
                                <label>
                                    <input type="checkbox"/> Check me out
                                </label>
                            </div>
                            <button type="submit" className="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        )
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


export default {Preview, Page, CreateForm};