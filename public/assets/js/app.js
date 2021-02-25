window.onload = function () {
    const app = new Vue({
        el: '#app',
        data: {
            editando: false,
            id: "",
            nome: "",
            idade: "",
            teste: "",
            pacientes: {}
        },
        methods: {
            async get() {
    
                let results = await axios.get('http://localhost:8000/crud/all');
    
                this.pacientes = results.data;

                console.log(this.pacientes)
    
            },
    
            async add() {
    
                 if(this.nome != '' && this.idade != '' && this.teste != ''){
                    console.log('Adiciona o conteudo dos campos:')
                    console.log(this.nome)
                    console.log(this.idade)
                    console.log(this.teste)
    
                    let result = await axios.post(`http://localhost:8000/crud/add`, {
                        nome: this.nome,
                        idade: this.idade,
                        teste: this.teste
                    });
    
                    console.log(result.status)

                    if(result.status == 201){
                        alert("O Paciente foi incluido com sucesso!")
                        this.changePageLista()
                    }else{
                        alert("Não foi possivel incluir o paciente!")
                    }

                   
            
                    // this.users.push({
                    //     name: this.nome,
                    //     age: this.idade,
                    //     test: this.teste
                    // });
    
                }else{
                    alert("Todos os campos precisam estar prenchidos!")
                }
            },

            
            edit(item) {
                console.log(item)
                this.editando = item.id
                this.id = item.id
                this.nome = item.nome
                this.idade = item.idade
                this.teste = item.teste
            },

            async atualiza(id) {
                let result = await axios.put(`http://localhost:8000/crud/atualiza/`, {
                    id: id,
                    nome: this.nome,
                    idade: this.idade,
                    teste: this.teste
                });

                console.log(result)

                if(result.status == 200){
                    this.editando = ''
                    this.get()
                }else{
                    alert('Ocorreu um erro ao atualizar as informações do paciente')
                    this.editando = ''
                } 
            },

            async remove(id) {
                console.log(id)
                let result = await axios.delete(`http://localhost:8000/crud/delete/`+ id);

                console.log(result)

                this.get()
            },

            cancelEdit() {
                this.editando = ''
            },

            changePageInclui() {
                window.location.href = '/inclui';
            },
            changePageHome() {
                window.location.href = '/';
            },
            changePageLista() {
                window.location.href = '/lista';
            }

        },
        beforeMount(){
            this.get()
         },
    });
}
