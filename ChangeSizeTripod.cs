using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeTripod : MonoBehaviour
{
      // Specifying when object is dragged
    void OnMouseDown() {
     transform.localScale = new Vector3 (0.2f,0.19f,0);
        }
}


 