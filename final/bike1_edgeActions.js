
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindElementAction(compId,symbolName,"${_Stage}","mouseover",function(sym,e){sym.play();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Stage}","mouseout",function(sym,e){sym.playReverse();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Rectangle4}","mouseover",function(sym,e){sym.play();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Rectangle4}","mouseout",function(sym,e){sym.playReverse();});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-47484654");