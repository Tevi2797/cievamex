 <!-- Modal -->
 <div class="modal fade" id="eliminar_parcela{{$parcela->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

    <div class="modal-content">

        <div class="modal-header">

        <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar Parcelas</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

        </div>

        <div class="modal-body">
        <form method="POST" action="parcelas/{{$parameter}}">
            @csrf @method('DELETE')
        <p>¿Realmente deseas eliminar esta parcela?</p>

        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" >Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
        </form>
    </div>

    </div>

</div>

<!-- End modal -->
