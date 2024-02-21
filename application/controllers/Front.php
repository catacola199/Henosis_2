<?php
class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}
	function index()
	{
		$this->load->view('index');
	}
	function about()
	{
		$this->load->view('about');
	}
	function services()
	{
		$this->load->view('services');
	}
	function photovideo()
	{
		$this->load->view('photovideo');
	}
	function wedding()
	{
		$this->load->view('wedding');
	}
	function Bagus_Aci($coba='')
	{
		$data['coba'] = $coba;
		echo $coba;
        // Load the view and pass the data
		$this->load->view('undangan_3',$data);
	}

	function wedding_1()
	{
		$this->load->view('undangan_1');
	}
	function wedding_2()
	{
		$this->load->view('undangan_2');
	}
	function studio()
	{
		$this->load->view('studio');
	}
	function portofolio()
	{
		$this->load->view('portofolio');
	}
	function contact()
	{
		$this->load->view('contact');
	}
	function produk_details()
	{
		$data["kategori"] = $this->m_barang->getdetailKategori();
		$data["konten"] = $this->m_barang->getdetailGambar();
		$data["IP"] = $this->m_barang->getdetailInformasiProduk();
		$this->load->view('product-details', $data);
	}
	function service_kalibrasi()
	{
		$this->load->view('service-kalibrasi');
	}
	function send_email()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.hostinger.com',
			'smtp_port' => 465,
			'smtp_user' => 'dkisip@sriintanperkasa.com',
			'smtp_pass' => 'Dki2023#',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
			
		);
		$this->load->library('email',$config);
		$this->email->initialize($config);

		// $from_email = 'dkisip@sriintanperkasa.com';
		// $to_email = $this->input->post('email');
        $this->email->from('dkisip@sriintanperkasa.com', 'SRI INTAN PERKASA');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Contact SRI INTAN PERKASA');
        $this->email->message($this->input->post('pesan'));

		
		$this->email->send();
		// $this->session->set_flashdata('email_send', 'Email berhasil dikirim');
		// redirect(base_url('contact'));
		
	}

	function service_teknik()
	{
		$this->load->view('service-teknik');
	}
	function service_ukes()
	{
		$this->load->view('service-ukes');
	}
	function details($id)
	{
		$data = $this->m_barang->barang($id);
		echo json_encode($data);
	}

	// function barang(){
	// 	$id = $this->input->get('id');
	// 	return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->result();
	// }
}
