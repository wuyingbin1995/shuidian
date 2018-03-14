<?php
namespace Admin\Controller;

class KongzhiiqiguanliController extends CommonController 
{
	//首页
    public function Shujucaiji()
    {
        if(IS_POST){
            dump(I('post.'));
            die;
            echo "<script>parent.location.href='".U('Admin/Kongzhiiqiguanli/index')."'</script>";
        }
    	$this->display();
    }

    public function Lazhahezha()
    {
        // dump(I('post.'));
        // die;   
        $this->display();
    }

    public function Kongliebiao()
    {
        
        $this->display();
    }

    public function Biaoshuju()
    {
        
        $this->display();
    }

    public function Kongshizhongguanli()
    {
        
        $this->display();
    }
}