
import React from 'react';
import TypeWriter from 'react-typewriter';

class Typed extends React.Component {
    constructor(props) {
        super(props);
        this.transitionDelay = 3000;
        this.state = {
            typing: 0,
            minDelay: 100,
            maxDelay: 250,
            phrases: this.props.phrases,
            currentPhrase: ""
        };

        this.onTypingEnd = this.onTypingEnd.bind(this);
    }

    onTypingEnd() {
            if (this.state.phrases.length === 1) return;

            if (this.state.typing === 1) {
                setTimeout(() => {
                    this.setState({
                        typing: -1,
                        maxDelay: 20,
                    })
                }, this.transitionDelay)
            } else {

                var phrase = this.state.phrases.shift();
                this.state.phrases.push(phrase);

                this.setState({
                    typing: 1,
                    maxDelay: 100,
                    currentPhrase: phrase,
                    phrases: this.state.phrases,
                })
            }
    }

    componentDidMount() {
        var phrase = this.state.phrases.shift();
        this.state.phrases.push(phrase);

        this.setState({
            typing: 1,
            currentPhrase: phrase,
            phrases: this.state.phrases,
        });
    }

    render() {
        return (
            <div>
                <TypeWriter typing={this.state.typing} maxDelay={this.state.maxDelay} minDelay={this.state.minDelay} onTypingEnd={this.onTypingEnd}>
                    <h1 className="typed white">{this.state.currentPhrase}</h1>
                </TypeWriter>
                <span className="typed-cursor">|</span>
            </div>
        );
    }
}

export default Typed;



