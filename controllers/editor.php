<?php
class Editor extends Controller {
    protected function Index(){
        $viewmodel = new EditorModel();
        $this->ReturnView($viewmodel->index(), true);
    }
}
?>