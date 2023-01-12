import React, { Component } from 'react'
import { ProgressBar } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
export class BriefAv extends Component {
    constructor(props){
        super(props)
    }
  render() {
    return (
        <div>BriefAv
            <div>
                {this.props.data.map(item=>(
                    <><span>{item?.brief_name}</span>
                    <ProgressBar now={item?.brief_av} label={`${item?.brief_av}%`}/>
                    </>
                ))}
            </div>
        </div>
    )
  }
}

export default BriefAv
