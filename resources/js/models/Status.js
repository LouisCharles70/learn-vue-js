class Status{
    static find(id){
        return axios.get('/statuses/'+id)
    }
    static all(){
        return axios.get('/statuses')
            .then(({data}) => then(data));
    }
}

export default Status;
