import React from "react";
import DatePicker from "react-datepicker";
import moment from "moment";
import "react-datepicker/dist/react-datepicker.css";
import "./date-picker.css";

class Picker extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            startDate: moment()
        };
        this.handleChange = this.handleChange.bind(this);
    }
    getDate() {}
    handleChange(date) {
        this.setState({
            startDate: date
        });
    }

    render() {
        return (
            <DatePicker
                id={this.props.id}
                selected={this.state.startDate}
                onChange={this.handleChange}
            />
        );
    }
}

export default Picker;
