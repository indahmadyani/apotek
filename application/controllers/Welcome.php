<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->data['hasil'] = $this->model_obat->getUser('obat');
		$this->load->view('welcome_message', $this->data);
	}
	public function form_input(){

		$this->load->view('form-input');
	}
	public function insert(){
		$kdobat = $_POST['kodeobat'];
		$proobat = $_POST['prodobat'];
		$expobat = $_POST['expaobat'];
		$nmobat = $_POST['namaobat'];
		$hrgobat = $_POST['hargaobat'];
		$hrgbeli = $_POST['hargabeli'];
		$stokobat = $_POST['stokobat'];
		$jenobat = $_POST['jenisobat'];
		$kdsatuan = $_POST['kodesatuan'];
		$data = array ('kd_obat'=> $kdobat, 'produser_obat' => $proobat, 'exp_obat' => $expobat, 'nm_obat' => $nmobat, 'harga_obat'=> $hrgobat, 'harga_beli' => $hrgbeli, 'stok_obat' => $stokobat, 'jenis_obat' => $jenobat, 'kd_satuan' => $kdsatuan);
		$tambah = $this->model_obat->tambahData('obat', $data);
		if ($tambah > 0){
			redirect('Welcome/index');
		}else{
			echo 'gagal disimpan';
		}
	}
	public function delete($id){
		$hapus = $this->model_obat->hapusData('obat', $id);
		if($hapus > 0){
			redirect('welcome/index');
			}else{
			echo 'gagal disimpan';
		}
	}
	public function form_Edit($id){
		$this->data['dataEdit'] = $this->model_obat->dataEdit('obat', $id);
		$this->load->view('form-edit', $this->data);
	}

	public function update($id){
		$kdobat = $_POST['kodeobat'];
		$proobat = $_POST['prodobat'];
		$expobat = $_POST['expaobat'];
		$nmobat = $_POST['namaobat'];
		$hrgobat = $_POST['hargaobat'];
		$hrgbeli = $_POST['hargabeli'];
		$stokobat = $_POST['stokobat'];
		$jenobat = $_POST['jenisobat'];
		$kdsatuan = $_POST['kodesatuan'];
		$data = array ('kd_obat'=> $kdobat, 'produser_obat' => $proobat, 'exp_obat' => $expobat, 'nm_obat' => $nmobat, 'harga_obat'=> $hrgobat, 'harga_beli' => $hrgbeli, 'stok_obat' => $stokobat, 'jenis_obat' => $jenobat, 'kd_satuan' => $kdsatuan);
		$edit = $this->model_obat->editData('obat', $data, $id);
		if ($edit > 0){
			redirect('Welcome/index');
		}else{
			echo 'gagal disimpan';
		}
	}
}
