import React, { Component } from 'react';

class Home extends Component {
    constructor() {
        super();
        this.state = {
            posts: []
        }
    }

    componentWillMount() {
      console.log(this.props);
    }

    componentDidMount() {
        let postUTL = "http://localhost/dm-headless-wp/wordpress/wp-json/wp/v2/posts/?_embed";
        fetch(postUTL)
            .then(response => response.json()) // promise
            .then(response => {
                this.setState({
                    posts: response
                })
            })
    }
    render() {
        let post = this.state.posts.map((post, index) => {
            console.log(post._embedded['wp:featuredmedia']['0']);
            return (
                <div key={index}>
                    <h2>{post.title.rendered}</h2>
                    <img src={post._embedded['wp:featuredmedia']['0'].source_url} alt={post._embedded['wp:featuredmedia']['0'].alt_text}/>
                </div>
            )

        });
        return (
            <div className="App">
                <h1>Hi, This is an into to React</h1>
                  <hr/>
                {post}
            </div>
        );
    }
    // handleClick(e) {
    //     // console.log(this); //undefined
    //     console.log("****");
    //     console.log(props);
    //     e.preventDefault();
    //     props.history.push('about');
    //   }
}

export default Home;
