<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function verificar_sessao()
        {
            if($this->session->userdata('logado') == false){
                redirect('dashboard/login');
            }
        }
        
        public function index()
	{
            $this->verificar_sessao();
            $this->db->select('*');
            $dados['usuario'] = $this->db->get('usuario')->result();
               /* if($indice==1){
                    $data['msg'] = "Usuario cadastrado com sucesso.";
                    $this->load->view('msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar o usuário.";
                    $this->load->view('msg_erro',$data);
                }if($indice==3){
                    $data['msg'] = "Usuario excluído com sucesso.";
                    $this->load->view('msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o usuário.";
                    $this->load->view('msg_erro',$data);
                }  */
               
                
		$this->load->view('listar_usuario', $dados);
	}
        
        public function cadastro()
	{
                $this->verificar_sessao();
		$this->load->view('cadastro_usuario');
	}
        
        public function cadastrar()
        {
                $this->verificar_sessao();
                $data['nome'] = $this->input->post('nome');
                $data['cpf'] = $this->input->post('cpf');
                $data['endereco'] = $this->input->post('endereco');
                $data['email'] = $this->input->post('email');
                $data['senha'] = $this->input->post('senha');
                $data['status'] = $this->input->post('status');
                $data['nivel'] = $this->input->post('nivel');
                
                if($this->db->insert('usuario',$data)){
                    redirect('usuario/1');
                }else{
                    redirect('usuario/2');
                }
        }
        public function excluir($id=null){
            
            $this->verificar_sessao();
            $this->db->where('idUsuario',$id);
            if($this->db->delete('usuario')){
                    redirect('usuario/3');
                }else{
                    redirect('usuario/4');
                }
            
        }
        
        public function atualizar($id=null){
            
            $this->verificar_sessao();
            $this->db->where('idUsuario',$id);
            $data['usuario'] = $this->db->get('usuario')->result();
            
           
            
            $this->load->view('editar_usuario',$data);
        }
        
         public function salvar_atualizacao()
        {
                $this->verificar_sessao();
                
                $id = $this->input->post('idUsuario');
             
                $data['nome'] = $this->input->post('nome');
                $data['cpf'] = $this->input->post('cpf');
                $data['endereco'] = $this->input->post('endereco');
                $data['email'] = $this->input->post('email');                
                $data['status'] = $this->input->post('status');
                $data['nivel'] = $this->input->post('nivel');
                
                $this->db->where('idUsuario',$id);
                if($this->db->update('usuario',$data)){
                    redirect('usuario/5');
                }else{
                    redirect('usuario/6');
                }
        }
        
        public function salvar_senha(){
            
            $this->verificar_sessao();
            $id = $this->input->post('idUsuario');
            
            $senha_antiga = $this->input->post('senha_antiga');
            $senha_nova = $this->input->post('senha_nova');
           
            $this->db->select('senha');
            $this->db->where('idUsuario', $id);
            $data['senha'] = $this->db->get('usuario')->result();
            $dados['senha'] = $senha_nova;
            
            if($data['senha'][0]-> senha == $senha_antiga) {
                $this->db->where('idUsuario', $id);
                $this->db->update('usuario', $dados);
                redirect('usuario/atualizar/' . $id. '/1');
            }else{
                redirect('usuario/atualizar/' . $id. '/2');
            }
        }
}