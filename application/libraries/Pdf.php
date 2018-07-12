use Dompdf\Dompdf;

Class Pdf extends Dompdf{
    public funtion_construct()
    {
        parent::_construct();
    }

    protected function ci()
    {
        return get instance();
    }

    public function load_view($view, $data = [], $filename = 'laporan.pdf')
    {
        $html = $this->ci()->load->view($view, $data, true);
        $this->loadHtml($html);
        $this->render();
        $this->stream($filename, [ 'Attachment' => false]);
    }
}