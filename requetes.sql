(select a.numero as numero , a.theme as theme , a.date_heure as date_heure , r.nom as nom, r.prenom as prenom , TRUE as participe
from participer p
inner join atelier a
on p.atelier = a.numero
inner join responsable r
on a.responsable = r.numero
where p.client = 5
and date_heure > now()
)

union

(select a.numero as numero , a.theme as theme , a.date_heure as date_heure , r.nom as nom, r.prenom as prenom , FALSE as participe
from atelier a
inner join responsable r
on a.responsable = r.numero
where a.numero not in (
	select distinct atelier
	from participer
	where client = 5
)
and nb_places - nb_participants > 0
and date_heure > now()
)
order by date_heure ;


