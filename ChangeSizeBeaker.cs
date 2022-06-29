using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeBeaker : MonoBehaviour
{



    // Specifying when object is dragged
    void OnMouseDown() {
        transform.localScale = new Vector3 (0.4f,0.3f,0);
        }
    


}

