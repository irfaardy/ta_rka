<?php

class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('layouts/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('layouts/footer', $vars, $return);

        return $content;
    else:
        $this->view('layouts/header', $vars);
        $this->view($template_name, $vars);
        $this->view('layouts/footer', $vars);
    endif;
    }

    public function loginTemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('layouts/auth/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('layouts/auth/footer', $vars, $return);

        return $content;
    else:
        $this->view('layouts/auth/header', $vars);
        $this->view($template_name, $vars);
        $this->view('layouts/auth/footer', $vars);
    endif;
    }

}
