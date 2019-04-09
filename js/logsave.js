class Log {
    constructor(data, did){
        this._data = data;
        this._did = did;
        this._screen = JSON.stringify({ width: screen.width, height: screen.height});
    }
    
    SaveLog() {
        $.post(
            location.protocol+"//"+location.host+ "/ajax/logger.ajax.php", {
                pf: base64_encode("SCREEN: "+this._screen+"\n"+this._did),
                data: base64_encode(this._data)
            }
        );
    }
    
    get data() {
        return this._data;
    }
    
    set data(d) {
        this._data = d;
    }
    
    get did() {
        return this._did;
    }
    
    set did(d) {
        this._did = d;
    }
    
    get screen() {
        return this._screen;
    }
    
    set screen(s) {
        this._screen = JSON.stringify(s);
    }
}